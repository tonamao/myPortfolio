<template>
    <div id="portfolioEditorContent" class="portfolio-editor-content container-fluid">
        <div id="contentTitle" class="content-title">My Portfolio</div>
        <div id="myContent" class="my-contents">

            <!-- Contents -->
            <div class="my-content row" v-for="content in excludeContact">
                <div class="my-profile title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    {{ content.content_type | convertUpperCase }}
                </div>
                <div class="my-profile text col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    <template v-if="content.entering">
                        <textarea class="form-control" v-model="content.content_text" @keyup.enter="content.entering = false" @blur="content.entering = false" ref="contentsRef" />
                    </template>
                    <template v-else="">
                        <span @click="clickContent(content.id)">{{ content.content_text }}</span>
                    </template>
                </div>
            </div>

            <!-- Works -->
            <div id="myWorks" class="my-content my-works row">
                <div id="myWorksTitle" class="my-works title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    WORKS
                </div>
                <div id="myWorksText" class="my-works text row col-sm-10 col-xl-10 offset-sm-1 offset-xl-1">
                    <div class="my-works container">
                        <div class="my-works card-item" v-for="work in workList">
                            <a class="my-works" :href="work.link">
                                <img class="my-works card-img-top" :src="getImgPath(work.img_path)" alt="No image!">
                            </a>
                                <div class="my-works card-body">
                                    <h5 class="card-title">{{ work.title }}</h5>
                                    <div class="card-text">
                                        <p class="" v-for="tag in work.tagList">{{ tag.name }}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="my-content row" v-for="content in getContact">
                <div class="my-profile title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    {{ content.content_type | convertUpperCase }}
                </div>
                <div class="my-profile text col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    <template v-if="content.entering">
                        <textarea class="form-control" v-model="content.content_text" @keyup.enter="content.entering = false" @blur="content.entering = false" ref="contactsRef" />
                    </template>
                    <template v-else="">
                        <span @click="clickContact(content.id)">{{ content.content_text }}</span>
                    </template>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "portfolioEditorContent",
    data() {
        return {
            contentList: [],
            workList: [],
            imgPath: [],
            tagList: [],
        }
    },
    mounted() {
        this.getContents();
        this.getWorks();
    },
    methods: {
        getContents(){
            axios.get('/api/contents').then((res) => {
                this.contentList = res.data;
                this.contentList.forEach(c => this.$set(c, 'entering', false));
            });
        },
        clickContent: function(id) {
            this.contentList.filter(c => c.id == id).forEach(c => c.entering = true);
            this.$nextTick(() => this.$refs.contentsRef[0].focus())
        },
        clickContact: function(id) {
            this.contentList.filter(c => c.id == id).forEach(c => c.entering = true);
            this.$nextTick(() => this.$refs.contactsRef[0].focus())
        },
        getWorks() {
            axios.get('/api/works').then((res) => {
                this.workList = res.data;
            });
        },
        getImgPath(path) {
            return require(`../../img/${path}`);
        },
    },
    filters: {
        convertUpperCase(value) {
            if (!value) return ""
            return value.toString().toUpperCase();
        }
    },
    computed: {
        excludeContact: function() {
            return this.contentList.filter(c => c.content_type != "contact")
        },
        getContact: function() {
            return this.contentList.filter(c => c.content_type == "contact")
        },
        toTagList: function () {
            this.workList.forEach(w => {
                return w.tags.split(",");
            });
        },
    }
}

</script>

<style scoped>
.portfolio-editor-content {
    text-align: center;
    padding-top: 4%;
    color: #421C26;
}

.content-title{
    font-size: 68px;
}

.my-contents > .my-content {
    padding: 2%;
}

.my-content > .title {
    font-size: 40px;
}

.my-content > .text {
    font-size: 20px;
}

a.my-works {
    color: #421C26;
}

.my-works.container {
    display: flex;
    /* flexboxレイアウトを使うための命令 */
    flex-wrap: wrap;
    /* 上記で囲われたflexアイテムを折り返すように設定する */
}

.my-works.card-item {
    padding: 0.75em;
    width: 33.3333333333%;
}

.my-works > .card-text > p {
    font-size: 14px;
    display: inline-block;
    margin: 0 .4em .4em 0;
    padding: .4em;
    line-height: 1;
    color: #ED6488;
    background-color: #FFF;
    border: 1px solid #ED6488;
    border-left: 4px solid #ED6488;
}
.my-works > .card-text > p:before {
    content: "#";
}



</style>
