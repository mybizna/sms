
<template>
    <table-render title="Sms Whitelist" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data() {
        return {
            path_param: ["sms", "whitelist"],
            model: {
                id: "",
                username: "",
                password: "",
                partner_id: "",
            },
            search_fields: [
                { type: "text", name: "contact_id", label: "Contact", ope: "", },
            ],
            username: "",
            password: "",
            partner_id: "",
            table_fields: [
                {
                    text: "Contact",
                    prop: "[sms_contact__name] [sms_contact__phone]",
                    name: "contact_id",
                    foreign: ['sms_contact__name', 'sms_contact__phone',]
                },
            ],
        };
    }
};
</script>
