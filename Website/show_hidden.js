function showDiv(select, idPrefix, mappings) {
  for (const id in mappings) {
    const display = mappings[id].includes(parseInt(select.value)) ? "block" : "none";
    document.getElementById(idPrefix + id).style.display = display;
  }
}

function showDiv1(select) {
  showDiv(select, "hidden_div", {
    "1": [1],
    "2": [2]
  });
}

function showDiv2(select) {
  showDiv(select, "hidden_div", {
    "3": [1],
    "4": [2]
  });
}

function showDiv3(select) {
  showDiv(select, "hidden_div", {
    "5": [1],
    "6": [3],
    "7": [2]
  });
}

function showDiv4(select) {
  showDiv(select, "hidden_div", {
    "8": [1],
    "9": [2],
    "10": [3],
    "11": [4],
    "12": [5]
  });
}

function showDiv5(select) {
  showDiv(select, "hidden_div", {
    "13": [2]
  });
}

function showDiv6(select) {
  showDiv(select, "hidden_div", {
    "14": [2]
  });
}

function showDiv7(select) {
  showDiv(select, "hidden_div", {
    "15": [2]
  });
}

function showDiv8(select) {
  showDiv(select, "hidden_div", {
    "16": [2]
  });
}

function showDiv11(select) {
  showDiv(select, "hidden_div", {
    "17": [1],
    "18": [2],
    "19": [3],
    "20": [4],
    "21": [5]
  });
}

function showDiv12(select) {
  showDiv(select, "hidden_div", {
    "22": [1, 2, 3, 7],
    "23": [4, 9],
    "24": [5],
    "25": [6],
    "26": [8],
    "27": [10]
  });
}

function showDiv17(select) {
  showDiv(select, "hidden_div", {
    "28": [2]
  });
}

function showDiv19(select) {
  showDiv(select, "hidden_div", {
    "28": [2]
  });
}
