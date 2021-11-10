<template>
    <panel-item :field="field">
        <template slot="value">
            <toggle ctx="Google">
                <google v-bind="field.value" />
            </toggle>
        </template>
    </panel-item>
</template>

<script>
import Google from './Preview/Google';
import Toggle from './Toggle';

export default {
    components: {
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
