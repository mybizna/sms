<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["sms", "contact", "form.vue"])
    },
};
</script>
