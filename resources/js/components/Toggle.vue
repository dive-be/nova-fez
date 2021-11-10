<template>
    <div>
        <a
            @click="toggle"
            class="cursor-pointer dim inline-block text-primary font-bold"
            :class="{ 'mb-2': expanded }"
            aria-role="button"
        >
            {{ label }}
        </a>

        <slot v-if="expanded"></slot>
    </div>
</template>

<script>
export default {
    data: () => ({ expanded: false }),

    methods: {
        toggle() {
            this.expanded = !this.expanded;
        },
    },

    props: {
        ctx: {
            default: 'Content',
            type: String,
        },
    },

    computed: {
        label() {
            return this.__(this.expanded ? `Hide ${this.ctx}` : this.ctx);
        },
    },
};
</script>
