<template>
    <div id="portfolioHeader" class="portfolio-header container-fluid mb-1">
        <div class="container">
            <nav class="navbar">
                <span class="navbar-brand mb-0 h1">My Portfolio</span>
                <div class="header-content">
                    <div class="links">
                        <a href="">
                            <font-awesome-icon icon="user" class="fa-icon user"></font-awesome-icon>
                            Profile
                        </a>
                        <a href="">
                            <font-awesome-icon icon="lightbulb" class="fa-icon lightbulb"></font-awesome-icon>
                            Skills
                        </a>
                        <a href="">
                            <font-awesome-icon icon="suitcase" class="fa-icon suitcase"></font-awesome-icon>
                            Works
                        </a>
                        <a href="">
                            <font-awesome-icon icon="envelope" class="fa-icon envelope"></font-awesome-icon>
                            Contact
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    name: "TestHeader"
}
</script>

<style scoped>
.portfolio-header {
    background-color: rgba(246,223,221,.7);
    box-shadow:  0 4px 4px 0 #636b6f;
    position: fixed;
}

.header-content {
    text-align: center;
}

.header-content > span {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
</style>
