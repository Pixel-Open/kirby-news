<template>
    <div class="news-container">
        <k-view class="k-news-view">
            <a class="news-link" @click="open">
                <k-header v-if="content.name" class="news-title">{{ content.name }}</k-header>
                <k-header v-else class="news-title">{{ $t('pixelopen.news.blueprints.blocks.title') }}</k-header>
            </a>
            <k-items v-if="news.length && content.show_image" :items="news.slice(0, content.pagination)" layout="cards">
                <template v-slot:default="data">
                    <k-item layout="cards" :text="data.item.title" :info="data.item.description"
                        :link="data.item.url" :image="{
                            cover: true,
                            back: 'blue-200',
                            src: data.item.cover,
                        }">
                    </k-item>
                </template>
            </k-items>
            <k-items v-else-if="news.length && !content.show_image" :items="news.slice(0, content.pagination)">
                <template v-slot:default="data">
                    <k-item :text="data.item.title" :info="data.item.description"
                        :link="data.item.url">
                    </k-item>
                </template>
            </k-items>
            <div v-else>{{ $t('pixelopen.news.blueprints.sections.empty') }}</div>
        </k-view>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            news: [],
        };
    },
    created() {
        this.apiRequests();
    },
    computed: {
        console: () => console,
        window: () => window,
    },
    methods: {
        async apiRequests() {
            try {
                this.news = await this.$api.get('getAllNews/4');
            } catch (error) {
                console.error('Error in apiRequests:', error);
            }
        },
    },
};
</script>