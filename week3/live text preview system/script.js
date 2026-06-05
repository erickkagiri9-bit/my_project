// script.js

const textInput =
document.getElementById("textInput");

const previewText =
document.getElementById("previewText");

const charCount =
document.getElementById("charCount");

const wordCount =
document.getElementById("wordCount");

const clearBtn =
document.getElementById("clearBtn");

const copyBtn =
document.getElementById("copyBtn");

/* LIVE PREVIEW */

textInput.addEventListener("input", () => {

  const text =
  textInput.value;

  // UPDATE PREVIEW

  previewText.textContent =
  text || "Your live preview appears here...";

  // CHARACTER COUNT

  charCount.textContent =
  text.length;

  // WORD COUNT

  const words =
  text.trim() === ""
  ? 0
  : text.trim().split(/\s+/).length;

  wordCount.textContent =
  words;

});

/* CLEAR BUTTON */

clearBtn.addEventListener("click", () => {

  textInput.value = "";

  previewText.textContent =
  "Your live preview appears here...";

  charCount.textContent = 0;

  wordCount.textContent = 0;

});

/* COPY BUTTON */

copyBtn.addEventListener("click", () => {

  navigator.clipboard.writeText(
    textInput.value
  );

  copyBtn.textContent =
  "Copied ✓";

  setTimeout(() => {

    copyBtn.textContent =
    "Copy Text";

  },1500);

});