/* Write here your custom javascript codes */
function sendFile(url){
    $("#filestack_picker").val(url);
    $("input[name=arquivo]").val(url);
    alert(url);
}

filepicker.pick(
    {
        mimetype: 'image/*',
        container: 'window',
        services: ['COMPUTER', 'FACEBOOK', 'INSTAGRAM', 'GOOGLE_DRIVE', 'DROPBOX']
    },
    function(Blob){
        console.log(JSON.stringify(Blob));
    },
    function(FPError){
        console.log(FPError.toString());
    });