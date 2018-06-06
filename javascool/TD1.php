<script>
    var t = [];
    t[0] = 1;
    t[1] = 2;
    t[2] = 3;
    t[3] = 4;
    t[4] = 12;
    t[5] = 11;
    t[6] = 1;
    t[7] = 4;
    AfficheTab(t);
    var t1 = changeTab(t);
    AfficheTab(t1);
    function changeTab(tab) {
        for (var i = 0; i < tab.length - 2; i++) {
            tab[i] = tab[i + 1] + tab[i + 2];
        }
        return tab;
    }
    function AfficheTab(tab) {
        console.log(tab);
    }
</script>
