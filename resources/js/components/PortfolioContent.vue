<template>
    <div id="portfolioContent" class="portfolio-content container-fluid">
        <div id="contentTitle" class="content-title">My Portfolio</div>
        <div id="myContent" class="my-contents">
            <!-- Contents -->
            <div class="my-content row" v-for="content in excludeContact">
                <div class="my-profile title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    {{ content.contentType | convertUpperCase }}
                </div>
                <div class="my-profile text col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    <span>{{ content.content }}</span>
                </div>
            </div>

            <div id="myWorks" class="my-content my-works row">
                <div id="myWorksTitle" class="my-works title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    WORKS
                </div>
                <div id="myWorksText" class="my-works text col-sm-10 col-xl-10 offset-sm-1 offset-xl-1">
                    <div class="container">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="../../img/test-samegame.png" alt="Test Image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <div class="card-text">
                                        <p class="">Java</p>
                                        <p class="">JavaScript</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="../../img/test-samegame.png" alt="Test image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <div class="card-text">
                                        <p class="">Java</p>
                                        <p class="">JavaScript</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="../../img/test-samegame.png" alt="Test image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <div class="card-text">
                                        <p class="">Java</p>
                                        <p class="">JavaScript</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="my-content row" v-for="content in getContact">
                <div class="my-profile title col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    {{ content.contentType | convertUpperCase }}
                </div>
                <div class="my-profile text col-sm-8 col-xl-8 offset-sm-2 offset-xl-2">
                    <span>{{ content.content }}</span>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "PortfolioContent",
    data() {
        return {
            contentList: [
                {id: 1, contentType: "profile", content: "ポートフォリオ", entering: false},
                {id: 2, contentType: "skills", content: "スキル", entering: false},
                {id: 3, contentType: "contact", content: "コンタクト", entering: false},
            ]
        }
    },
    filters: {
        convertUpperCase(value) {
            if (!value) return ""
            return value.toString().toUpperCase();
        }
    },
    computed: {
        excludeContact: function() {
            return this.contentList.filter(c => c.contentType != "contact")
        },
        getContact: function() {
            return this.contentList.filter(c => c.contentType == "contact")
        },
    }
}
</script>

<style scoped>
.portfolio-content {
    text-align: center;
    padding-top: 4%;
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

.card-text > p {
    font-size: 14px;
    display: inline-block;
    margin: 0 .1em .2em 0;
    padding: .2em;
    line-height: 1;
    color: #F5A9B3;
    background-color: #fff;
    border: 1px solid #F5A9B3;
    border-left: 4px solid #F5A9B3;
}
.card-text > p:before {
    content: "#";
}



</style>
