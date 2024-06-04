<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
    <div class="search_container">
        <input type="search" name="s" value="" placeholder="Pesquisar no site" class="search_input" />
        <button type="submit" value="buscar" aria-label="botão de pesquisa" class="search_btn">
            <img class="search_icon" src="<?php echo get_theme_file_uri('/img/search-icon.png') ?>" alt="">
        </button>
    </div>
</form>

<style>
    .search_container {
        border-radius: 43px;
        background: #F0F0F0;
        display: inline-flex;
        padding: 8px ;
        justify-content: center;
        align-items: center;
        gap: 76px;
        max-width: clamp(180px, 15vw, 268px);
        position: relative;
        overflow: hidden;
    }

    .search_input {
        all: unset;
        padding-right: 20px;
        padding-left: 0px;
        transform: translateX(20px);
        padding-top: 2px;
        padding-bottom: 2px;
        width: 100% !important;
    }

    .search_icon {
        all: unset;
        cursor: pointer;
        position: relative;
        padding: 6px;
    }

    .search_btn {
        width: 30px;
        height: 30px;
        position: absolute;
        top: 50%;
        right: 0px;
        transform: translate(-10px, -50%);
        border: none;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>