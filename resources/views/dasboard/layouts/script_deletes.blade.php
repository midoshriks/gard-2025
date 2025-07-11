<script type="text/javascript">
    function selects() {
        var ele = document.getElementsByClassName("ids");
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == "checkbox") ele[i].checked = true;
        }
    }

    function deSelect() {
        var ele = document.getElementsByClassName("ids");
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == "checkbox") ele[i].checked = false;
        }
    }
</script>
