const keepFolder = require("imagemin-keep-folder");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const gifsicle = require("imagemin-gifsicle");
const svgo = require("imagemin-svgo");

let mode = "static";
if (process.argv.length >= 3) {
  mode = process.argv[2];
}

keepFolder(["./src/assets/images/**/*.*"], {
  plugins: [
    mozjpeg({
      quality: 80,
    }),
    pngquant({
      quality: [0.65, 0.8],
    }),
    gifsicle(),
    svgo(),
  ],
  replaceOutputDir: (output) => {
    if (mode === "wp") {
      return output.replace(
        /images\//,
        "../../web/wp_2022/wp-content/uploads/"
      );
    }
    return output.replace(
      /images\//,
      "../../htdocs/wp_2022/wp-content/uploads/"
    );
  },
});
