
<template>
    <table-list title="sms Subscriber" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-list>
</template>

<script>

export default {
    components: {
        TableList: window.$func.fetchComponent("components/common/TableList.vue")
    },
    data () {
        return {
            path_param: ["sms", "blacklist"],
            model: {
                id: "",
                username: "",
                password: "",
                partner_id: "",
            },
            search_fields: [
                { type: "text", name: "contact_id", label: "Contact", ope: "", },
            ],
            table_fields: [
                { 
                    text: "Contact", 
                    prop: "[sms_contact__name] [sms_contact__phone]", 
                    name: "contact_id", 
                    foreign: ['sms_contact__name','sms_contact__phone',]
                },
            ],
        };
    }
};
</script>
