<template>
    <div class="google">
        <span class="google__title">{{ title }}</span>

        <div class="google__url">
            <span class="google__url--title">{{ fullUrl }}</span>
            <span class="google__url--arrow"></span>
        </div>

        <span class="google__description">
            {{ description }}
        </span>
    </div>
</template>

<script>
export default {
    props: ['description', 'image', 'title', 'url'],

    computed: {
        fullUrl() {
            return this.url.scheme + '://' + this.url.host;
        },
    },
};
</script>

<style scoped>
.google {
    line-height: 20px;
    font-family: Arial, sans-serif;
    -webkit-font-smoothing: subpixel-antialiased;
    width: 600px;
}

.google__title {
    color: #1a0dab;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size: 18px;
}

.google__url {
    font-size: 14px;
    line-height: 20px;
    height: 17px;
    white-space: nowrap;
}

.google__url--title {
    position: relative;
    top: -2px;
    color: #006621;
}

.google__url--arrow {
    vertical-align: middle;
    margin-top: -4px;
    margin-left: 3px;
    border-width: 5px 4px 0 4px;
    border-color: #006621 transparent;
    display: inline-block;
}

.google__description {
    font-size: 13px;
    line-height: 1.4;
    word-wrap: break-word;
}
</style>
