<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["sms", "whitelist", "form.vue"])
    },
};
</script>
