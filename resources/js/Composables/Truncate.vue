<script lang="ts">

export const truncate = (text: string, size: number = 20) => {
    const isShortend = text.length >= size
    return {
        "text": isShortend ? text.substring(1, size) + "..." : text,
        "isShortend": isShortend,
    };
}

</script>


