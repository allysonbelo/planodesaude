<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div class="search_container">
        <input type="search" id="s" name="s" value="" placeholder="Pesquisar no site" class="search_input" />
        <button type="submit" value="buscar" id="searchsubmit"><img class="search_icon" src="<?php echo get_theme_file_uri('/img/search-icon.png') ?>" alt=""></button>
    </div>
</form>

<style>
    .search_container {
        border-radius: 43px;
        background: #F0F0F0;
        display: inline-flex;
        padding: 8px 14px;
        justify-content: center;
        align-items: center;
        gap: 76px;
        max-width: clamp(180px, 15vw, 268px);
        position: relative;
    }

    .search_input {
        all: unset;
        padding-right: 20px;
        transform: translateX(20px);
    }

    #searchsubmit {
        all: unset;
        cursor: pointer;
        position: absolute;
        right: 8px;
        background-color: #F0F0F0;
    }
</style>