<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["sms", "gateway", "form.vue"])
    },
};
</script>
