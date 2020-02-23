function approve(ref) {
    var txt;
    var r = confirm("Do you want to approve this campaign?");
    if (r == true) {
        window.location.href = ref;
    }
}