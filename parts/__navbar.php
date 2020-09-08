<?php
if (!isset($page_name)) $page_name = '';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">體驗後台管理</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $page_name == 'data_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="./../test/data_list.php">體驗活動列表</a>
                </li>
                <li class="nav-item <?= $page_name == 'data_experienceinsert' ? 'active' : '' ?>">
                    <a class="nav-link" href="./../test/data_experienceinsert.php">新增體驗資料</a>
                </li>
                <li class="nav-item <?= $page_name == 'wood_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="./../test/wood_list.php">木工創客地點表</a>
                </li>
                <li class="nav-item <?= $page_name == 'wood_experienceinsert' ? 'active' : '' ?>">
                    <a class="nav-link" href="./../test/wood_experienceinsert.php">新增木工創客地點資料</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<style>
    .navbar .nav-item.active {
        background-color: greenyellow;
        border-radius: 5px;
    }
</style>