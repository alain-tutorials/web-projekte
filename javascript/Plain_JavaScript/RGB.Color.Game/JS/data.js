function Color(background, rgb) {
    this.colorName = background;
    this.rgb = rgb;
    this.nodeElement = '';

    this.getRgb = function () {
        return this.rgb;
    };
    this.addNode = function (elementCouleur) {
        this.nodeElement = elementCouleur;
    };

    this.getNodeElement = function () {
        return this.nodeElement;
    };
}

var colorContainer = [
    new Color("orange", "RGB(255, 165, 0)"),
    new Color("gray", "RGB(255, 165, 0)"),
    new Color("white", "RGB(255, 255, 255)"),
    new Color("black", "RGB(0, 0, 0)"),
    new Color("red", "RGB(255, 0, 0)"),
    new Color("maroon", "RGB(128, 0, 0)"),
    new Color("lime", "RGB(0, 255, 0)"),
    new Color("green", "RGB(0, 128, 0)"),
    new Color("yellow", "RGB(255, 255, 0)"),
    new Color("olive", "RGB(128, 128, 0)"),
    new Color("blue", "RGB(0, 0, 255)"),
    new Color("navy", "RGB(0, 0, 128)"),
    new Color("teal", "RGB(0, 128, 128)"),
    new Color("fuchsia", "RGB(255, 0, 255)"),
    new Color("aqua", "RGB(0, 255, 255)"),
    new Color("silver", "RGB(192, 192, 192)"),
    new Color("purple", "RGB(128, 0, 128)")
];




