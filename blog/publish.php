<?php
session_start();
if (empty($_SESSION['agrichainxmail']) and empty($_SESSION['user'])) {
    $redrr = '../login.php';
    header("location:$redrr");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="Bokehlicia-Captiva-Web-soundcloud.ico" type="image/x-icon">


    <title>Agrichainx | Blog-Create a post here</title>
    <link rel="stylesheet" href="css/w3c.css">
    <script src="js/ajax.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/main.css">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome5.1.0.min.css">


    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="editor/css/froala_editor.css">
    <link rel="stylesheet" href="editor/css/froala_style.css">
    <link rel="stylesheet" href="editor/css/plugins/code_view.css">
    <link rel="stylesheet" href="editor/css/plugins/colors.css">
    <link rel="stylesheet" href="editor/css/plugins/emoticons.css">
    <link rel="stylesheet" href="editor/css/plugins/image_manager.css">
    <link rel="stylesheet" href="editor/css/plugins/image.css">
    <link rel="stylesheet" href="editor/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="editor/css/plugins/table.css">
    <link rel="stylesheet" href="editor/css/plugins/char_counter.css">
    <link rel="stylesheet" href="editor/css/plugins/video.css">
    <link rel="stylesheet" href="editor/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="editor/css/plugins/file.css">

    <style>
    div#editor {
        width: 81%;
        margin: auto;
        text-align: left;
    }

    body {
        font-family: 'Raleway', sans-serif;
        background-image: linear-gradient(-90deg, green, black);

    }


    .headline {
        font-size: 1.2em;
        text-align: center;
        color: white;
        margin-top: 1em;
    }

    .editor {
        width: 80%;
        margin-top: 1em;
    }

    @media and (max-width:560px) {
        .headline {
            font-size: 1em;
        }
    }

    @media (max-width:500px) {
        .dropdown-content img {
            width: 50%
        }

    }

    .button {
        color: white;
        background-color: black;
        height: 1.5em;
        margin-top: 1em;
        font-size: 1.2em;
        font-weight: bold;
        border-radius: 0.5em;
        weight: 4em;
    }

    .button:hover {
        color: black;
        background-color: white;
    }
    </style>
</head>
<?php
include 'header-blog.php';
?>

<body>
    <section class="section-4" style="background-image: linear-gradient(-90deg, green, black);">

        <div class="container">
            <br><br>
            <center>
                <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
                <script>
                function typing() {
                    document.getElementById('postContent').value = document.getElementById('my-content').innerHTML;
                }
                </script>
                <div class='headline'>Publish Your Article/News/Events here</div> <br>

                <form class="" onsubmit='return typing()' action="submitpublish.php" name='createPost' method="post"
                    enctype='multipart/form-data'>

                    <input type="text" name="postTitle" class='editor' style="height:60px;color:black" value=""
                        placeholder="Title of Post" required><br>

                    <!--textarea type="text" style="height:15em" cols="80" rows="5"></textarea><br-->
                    <!--div id="editor">
                        <div id='edit' style="margin-top: 30px;">
                            <div id='edit1'></div>
                        </div>
                    </div-->
                    <div id='my-content' class='editor' placeholder='test'    style='background-color:white;margin-bottom:1em;overflow:auto;height:10em'  oninput='reportDesc()' contenteditable='true' spellcheck='false'></div>
                                    <div style='margin-bottom:1em'>
                                        <button id='boldButton' onclick='bold()' title='Bold'><b>B</b></button>
                                        <button id='boldButton' onclick='underline()' title='underline'><b>U</b></button>
                                        <button id='italicButton' onclick='italic()' title='Italic'><em>I</em></button>
                                        
                                        <button id='linkButton' onclick='link()' title='Create Link'>Link</button>
                                        <button id='unLinkButton' onclick='unlink()' title='Remove Link'>Unlink</button>
                                        <button id='undoButton' title='Undo the previous action'>&larr;</button>
                                        <button id='redoButton' title='Redo'>&rarr;</button>
                                    </div>
                    <div style='display:none'><textarea type='text' id='postContent' name='postContent'></textarea>
                    </div>

                    <div style='color:white;margin-top:0.5em'>Pick a file(image or video) from below as the post main
                        file</div>
                    <input type='file' name='headerFile' class='editor'
                        accept='image/jpg,image/png,image/jpeg,image/gif,video/mp4' required /><br />
                    <div class='editor' style='color:white;'>Select Location</div>
                    <div class='editor' style='display:inline-table;color:white;'>
                        <div style='display:inline-table;color:white;'>News:<input type="radio" style='display:inline-table'
                                value="news" name="type"></div><br />
                        <div style='display:inline-table;color:white;'>Article:<input type="radio" style='display:inline-table'
                                value="article" name="type"></div><br />
                        <div style='display:inline-table;color:white;'>Event:<input type="radio" style='display:inline-table'
                                value="event" name="type"></div><br />
                    </div>
                    <input type="submit" class="button" name='createPost' id='createPost' value="PUBLISH">
                </form>

            </center>
        </div>
        <br>

        <br>

    </section>

    <!--script type="text/javascript" src="editor/js/froala_editor.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/align.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/code_beautifier.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/code_view.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/colors.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/draggable.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/emoticons.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/font_size.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/font_family.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/image.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/file.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/image_manager.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/line_breaker.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/link.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/lists.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/paragraph_format.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/paragraph_style.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/video.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/table.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/url.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/entities.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/char_counter.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/inline_style.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/save.min.js"></script>
    <script type="text/javascript" src="editor/js/plugins/fullscreen.min.js"></script-->

    <script>
    (function() {
        new FroalaEditor("#edit", {
            pastePlain: true
        })
    })()
    </script>

</body>
<script>
                        window.addEventListener('load', function(){
                            //first check if execCommand and contentEditable attribute is supported or not.
                            if(document.contentEditable != undefined && document.execCommand != undefined)
                        {
                            alert('HTML5 Document Editing API Is Not Supported');
                            }
                            else
                            {
                                document.execCommand('styleWithCSS', false, true);
                            }
                        }, false);
                        //bolden the selected text
                        function bold()
                        {
                            document.execCommand('bold', false, null);
                        }

                        //bolden the selected text
                        function italic()
                        {
                            document.execCommand('italic', false, null);
                        }
                        

                        //underlines the selected text
                        function underline()
                        {
                            document.execCommand('underline', false, null);
                        }
                    
                        //makes the selected text as hyperlink.
                        function link()
                        {
                            var url = prompt('Enter the https:// prefixed URL');
                            document.execCommand('createLink', false, url);
                        }
                    function unlink()
                        {
                            document.execCommand('removeLink', false, url);
                        }
                        //displays HTML of the output
                        function displayhtml()
                        {
                            //set textContent of pre tag to the innerHTML of editable div. textContent can take any form of text and display it as it is without browser interpreting it. It also preserves white space and new line characters.
                            document.getElementsByClassName('htmloutput')[0].textContent = document.getElementsByClassName('editor')[0].innerHTML;
                        }

                        function reportDesc(){
                            var txt = document.getElementById('my-content');
                            if(txt.value.length >= 2){
                                txt.style.color = 'red';
                                document.getElementById('createPost').disabled = true;
                            }else{
                                txt.style.color = 'transparent';
                                document.getElementById('createPost').disabled = false;
                            }
                        }
                    </script>
</html>
<?php
include ('footer-blog.php');
?>