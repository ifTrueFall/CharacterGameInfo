function sendEmail() {
    var form = document.getElementById("characterForm");
    var name = form.elements["name"].value;
    var race = form.elements["race"].value;
    var characterClass = form.elements["class"].value;
    var background = form.elements["background"].value;

    var subject = "New D&D Character Info";
    var body = "Character Name: " + name + "\n" +
               "Race: " + race + "\n" +
               "Class: " + characterClass + "\n" +
               "Background:\n" + background + "\n";

    var mailtoLink = "mailto:yourgameinfos@gmail.com" +
                     "?subject=" + encodeURIComponent(subject) +
                     "&body=" + encodeURIComponent(body);

    window.location.href = mailtoLink;
}