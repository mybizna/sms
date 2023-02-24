
<template>
    <table-render :path_param="['sms', 'gateway']" title="sms Subscriber" :table_fields="table_fields">

        <template #header>
            <th-render>Name</th-render>
            <th-render>Url</th-render>
            <th-render>Ordering</th-render>
            <th-render>Published</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.tinametle }}</td>
            <td>{{ item.url }}</td>
            <td>{{ item.ordering }}</td>
            <td class="text-center">
                <btn-status :status="item.published"></btn-status>
            </td>
        </template>

    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['name', 'url', 'ordering', 'published'],
        };
    }
};
</script>
