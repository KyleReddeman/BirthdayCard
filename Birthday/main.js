(function() {
    window.onload = function() {
        var years = document.querySelectorAll('.listItem');
        for(var i = 0; i < years.length; i++) {
            years[i].onclick = goToYear;
        }

        function goToYear() {
            var location = this.getAttribute('value');
            window.location.href = location + "/index.php";
        }
    };



})();
