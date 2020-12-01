<template>
    <div id="portfolioHeader" class="portfolio-header container-fluid mb-1">
        <div class="container">
            <nav class="navbar portfolio-navbar">
                <span class="navbar-brand mb-0 h1">
                    <font-awesome-icon icon="bars" class="fa-icon bars portfolio-menu-icon"></font-awesome-icon>
                    <span class="portfolio-menu-title">My Portfolio</span>
                </span>
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
    name: "PortfolioHeader"
}
</script>

<style scoped>

.portfolio-header {
    color: #421C26;
    background-color: rgba(246,223,221,.8);
    box-shadow:  0 4px 4px 0 #662B3A;
    position: fixed;
    z-index: 2;
}

.portfolio-navbar {
    height: 56px;
}

.header-content {
    text-align: center;
}

.header-content > span {
    padding: 0 .2rem;
    font-size: .8rem;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

/* For Desktop */
@media (min-width: 768px) {
    .portfolio-menu-title {
    }

    .links > a {
        color: #421C26;
        padding: 0 .2rem;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
}

/* For SmartPhone */
@media (max-width: 767.98px) {
    .portfolio-menu-title {
        display: none;
    }

    .links > a {
        display: none;
    }
}
</style>
