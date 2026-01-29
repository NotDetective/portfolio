<script>
export default {
    layout: null,
};
</script>

<script setup>
import {useForm} from "@inertiajs/vue3";
import Input from "@/Shared/Form/Input.vue";
import Checkbox from "@/Shared/Form/Checkbox.vue";
import SubmitButton from "@/Shared/Form/SubmitButton.vue";
import {ref} from "vue";

let processing = ref(false);

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        preserveState: true,
        onStart() {
            processing.value = true;
        },
        onFinish() {
            processing.value = false;
        },
        onError() {
            processing.value = false;
        },
    });
};


</script>

<template>

    <main
        class="h-screen flex justify-center items-center"
    >
        <form
            @submit.prevent="submit"
            class="bg-white shadow-md rounded w-1/4 h-fit px-8 pt-6 pb-8 mb-4"
        >
            <h1 class="text-4xl text-center mb-4">Sign In</h1>

            <Input
                label="Email"
                type="email"
                name="email"
                v-model="form.email"
                required
                :error="form.errors.email"
            />

            <Input
                label="Password"
                type="password"
                name="password"
                v-model="form.password"
                required
                :error="form.errors.password"
            />

            <Checkbox
                label="Remember me"
                name="remember"
                v-model="form.remember"
                :error="form.errors.remember"
            />

            <SubmitButton
                text="Sign In"
                :disabled="false"
                :loading="false"
            />

        </form>
    </main>

</template>
