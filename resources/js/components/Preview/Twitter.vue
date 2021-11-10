<template>
    <div class="twitter">
        <div
            class="twitter__image"
            :style="{ 'background-image': `url(${image})` }"
        />

        <div class="twitter__text">
            <span class="twitter__title">{{ title }}</span>

            <span class="twitter__description">{{ description }}</span>

            <span class="twitter__link">{{ url.host }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: ['description', 'image', 'title', 'url'],
};
</script>

<style scoped>
.twitter {
    border-color: #e1e8ed;
    border-width: 1px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu,
        'Helvetica Neue', sans-serif;
    width: 506px;
    border-radius: 0.42857em;
    overflow: hidden;
}

.twitter__description {
    height: 2.6em;
    max-height: 2.6em;
    margin-top: 0.32333em;
    line-height: 1.3em;
    word-wrap: break-word;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    display: -webkit-box;
}

.twitter__image {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-color: inherit;
    border-bottom-width: 1px;
    width: 504px;
    height: 252px;
    overflow: hidden;
}

.twitter__link {
    display: block;
    text-transform: lowercase;
    line-height: 1.3125;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-top: 0.32333em;
    color: #8899a6;
}

.twitter__text {
    color: #18283e;
    font-size: 14px;
    padding: 0.75em 1em;
}

.twitter__title {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-weight: bold;
    line-height: 1.3em;
    max-height: 1.3em;
}
</style>
