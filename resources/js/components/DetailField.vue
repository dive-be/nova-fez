<template>
    <panel-item :field="field">
        <template slot="value">
            <toggle class="mb-2" ctx="Facebook">
                <facebook v-bind="field.value" />
            </toggle>

            <toggle class="mb-2" ctx="Google">
                <google v-bind="field.value" />
            </toggle>

            <toggle class="mb-2" ctx="Linkedin">
                <linkedin v-bind="field.value" />
            </toggle>

            <toggle ctx="Twitter">
                <twitter v-bind="field.value" />
            </toggle>
        </template>
    </panel-item>
</template>

<script>
import Facebook from './Preview/Facebook';
import Google from './Preview/Google';
import Linkedin from './Preview/Linkedin';
import Toggle from './Toggle';
import Twitter from './Preview/Twitter';

export default {
    components: {
        facebook: Facebook,
        google: Google,
        linkedin: Linkedin,
        toggle: Toggle,
        twitter: Twitter,
    },

    props: ['field'],
};
</script>

<style scoped>
* {
    user-select: none;
}
</style>
