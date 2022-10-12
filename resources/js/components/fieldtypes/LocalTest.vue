<template>

    <div>
        <text-input :value="value" @input="update" placeholder="LOCAL TEST FIELD (RED OUTLINE)" />
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
