
<template>
    <table-render title="sms Subscriber" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["sms", "contact"],
            model: {
                id: "",
                name: "",
                phone: "",
                ordering: "",
                published: "",
            },
            search_fields: [
                { type: "text", name: "name", label: "Name", ope: "", },
                { type: "text", name: "phone", label: "Phone", ope: "", },
                { type: "text", name: "ordering", label: "Ordering", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Name", prop: "name", name: "name", },
                { text: "Phone", prop: "phone", name: "phone", },
                { text: "Ordering", prop: "ordering", name: "ordering", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
