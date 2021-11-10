<template>
    <div class="facebook">
        <div
            class="facebook__image"
            :style="{ 'background-image': `url(${image})` }"
        />

        <div class="facebook__text">
            <span class="facebook__link">{{ url.host }}</span>

            <div class="facebook__content">
                <div class="facebook__wrapper">
                    <div class="facebook__title">{{ title }}</div>
                </div>

                <span class="facebook__description">{{ description }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['description', 'image', 'title', 'url'],
};
</script>

<style scoped>
.facebook {
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont,
        '.SFNSText-Regular', sans-serif;
    width: 500px;
}

.facebook__content {
    color: #4b4f56;
    display: block;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    height: 46px;
    line-height: 14.4px;
    max-height: 46px;
    overflow-x: hidden;
    overflow-y: hidden;
    word-wrap: break-word;
    -webkit-border-horizontal-spacing: 0px;
    -webkit-border-vertical-spacing: 0px;
    -webkit-font-smoothing: antialiased;
}

.facebook__description {
    color: #606770;
    display: -webkit-box;
    font-size: 14px;
    line-height: 20px;
    margin-top: 3px;
    max-height: 80px;
    overflow-x: hidden;
    overflow-y: hidden;
    text-overflow: ellipsis;
    word-break: break-word;
    word-wrap: break-word;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
}

.facebook__image {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border: 1px solid #dadde1;
    width: 500px;
    height: 261px;
}

.facebook__link {
    color: #606770;
    display: block;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    line-height: 11px;
    overflow-x: hidden;
    overflow-y: hidden;
    text-overflow: ellipsis;
    text-transform: uppercase;
    white-space: nowrap;
    width: 501px;
    word-wrap: break-word;
}

.facebook__text {
    padding: 10px 12px;
    background: #f2f3f5;
    border: 1px solid #dadde1;
    border-top: none;
}

.facebook__title {
    color: #1d2129;
    font-weight: 600;
    letter-spacing: normal;
    word-wrap: break-word;
    font-size: 16px;
    line-height: 20px;
}

.facebook__wrapper {
    margin-top: 5px;
}
</style>
