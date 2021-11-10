<template>
    <panel-item :field="field">
        <template slot="value">
            <toggle class="mb-2" ctx="Facebook">
                <facebook v-bind="field.value" />
            </toggle>

            <toggle class="mb-2" ctx="Google">
                <google v-bind="field.value" />
            </toggle>
        </template>
    </panel-item>
</template>

<script>
import Facebook from './Preview/Facebook';
import Google from './Preview/Google';
import Toggle from './Toggle';

export default {
    components: {
        facebook: Facebook,
        google: Google,
        toggle: Toggle,
    },

    props: ['field'],
};
</script>

<style scoped>
* {
    user-select: none;
}
</style>
