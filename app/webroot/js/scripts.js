function appUrl() {
    if (document.location.host === '127.0.0.1' || document.location.host === 'localhost') {
        return "http://localhost/sys_maladies/";
    } else {
        return "http://" + document.location.host + "/";
    }
}
function setActiveMenu() {
    if (document.location.host === '127.0.0.1' || document.location.host === 'localhost') {
        var path = document.location.pathname;
        var explodedPath = path.split("/");
        if (explodedPath[2] === "") {
            $("#accueil").addClass("active");
        }
        if (explodedPath[2] === "saisons") {
            $("#saisons").addClass("active");
        }
        if (explodedPath[2] === "maladies" && explodedPath[3] === undefined) {
            $("#maladies").addClass("active");
        }
        if (explodedPath[2] === "symptomes") {
            $("#symptomes").addClass("active");
        }
        if (explodedPath[2] === "maladies" && explodedPath[3] === "bc_bf") {
            $("#bc_bf").addClass("active");
        }
    } else {
        var path = document.location.pathname;
        var explodedPath = path.split("/");
        if (explodedPath[1] === "") {
            $("#accueil").addClass("active");
        }
        if (explodedPath[1] === "saisons") {
            $("#saisons").addClass("active");
        }
        if (explodedPath[1] === "maladies" && explodedPath[2] === undefined) {
            $("#maladies").addClass("active");
        }
        if (explodedPath[1] === "symptomes") {
            $("#symptomes").addClass("active");
        }
        if (explodedPath[1] === "maladies" && explodedPath[2] === "bc_bf") {
            $("#bc_bf").addClass("active");
        }
    }
}
setActiveMenu();