<template>
    <div>
        <div v-if="expanded">
            <slot></slot>
        </div>

        <a
            @click="toggle"
            class="cursor-pointer dim inline-block text-primary font-bold"
            :class="{ 'mt-6': expanded }"
            aria-role="button"
        >
            {{ label }}
        </a>
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
