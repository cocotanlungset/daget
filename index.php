
<html>
    <head>
        <title>Daget Generate v1</title>
    </head>
    <body>
        <form method="POST" id="asu">
            c <input type="text" id="c" placeholder="c=ISI" /> <br/><br/> <button type="submit">Generate</button> 
        </form>
        <div id="result"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
    <script>
        function copyDivToClipboard() {
            var range = document.createRange();
            range.selectNode(document.getElementById("result"));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
        }

        function goyang() {
            if($("#c").val() != "" && $("#r").val() != "") {
                $("#r").val($("#r").val())
                $("#result").html("<br/>https://link.dana.id/kaget?c=" + $("#c").val())
                copyDivToClipboard()
            }
        }
        
        $("form#asu").submit(function() {
            goyang()
            
            return false
        })
    </script>
</html>
