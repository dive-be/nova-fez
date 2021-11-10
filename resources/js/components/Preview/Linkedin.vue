<template>
    <div class="linkedin">
        <div
            class="linkedin__image"
            :style="{ 'background-image': `url(${image})` }"
        />

        <div class="linkedin__text">
            <div class="linkedin__title">{{ title }}</div>
            <span class="linkedin__link">{{ url.host }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: ['description', 'image', 'title', 'url'],
};
</script>

<style scoped>
.linkedin {
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont,
        '.SFNSText-Regular', sans-serif;
    width: 552px;
}

.linkedin__image {
    height: 288px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border: 1px solid #dadde1;
    width: 552px;
}

.linkedin__link {
    font-size: 12px;
    line-height: 16px;
    color: rgba(0, 0, 0, 0.6);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 16px;
}

.linkedin__text {
    padding: 8px 16px;
    border: 1px solid #e6e9ec;
    border-top: none;
    background: #f3f6f8;
}

.linkedin__title {
    font-weight: 600;
    font-size: 14px;
    line-height: 20px;
    color: rgba(0, 0, 0, 0.9);
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    max-height: 40px;
}
</style>
