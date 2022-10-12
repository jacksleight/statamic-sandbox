<template>

    <div>
        <text-input :value="value" @input="update" placeholder="ADDON CONFIG TEST FIELD" />
    </div>

</template>

<script>
export default {

    mixins: [Fieldtype],

    data() {
        return {
            //
        };
    }

};
</script>
