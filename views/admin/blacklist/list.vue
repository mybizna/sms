
<template>
    <table-render title="sms Subscriber" :path_param="['sms', 'blacklist']" :table_fields="table_fields">
        <template #header>
            <th-render>Contact</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.contact_id__sms_contact__name }} {{ item.contact_id__sms_contact__phone }}</td>
        </template>

    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['contact_id__sms_contact__name', 'contact_id__sms_contact__phone']
        };
    }
};
</script>
