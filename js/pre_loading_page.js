var preloaded = false;

function preloadPage(link) {
    if (!preloaded) {
        var iframe = document.createElement('iframe');
        iframe.style.display = 'none';

        iframe.onload = function() {
            console.log('Pré-carregamento da página "' + link.href + '" concluído.');
            document.body.removeChild(iframe);
        };
        iframe.src = link.href;
        document.body.appendChild(iframe);

        preloaded = true;
    }
}