function update(e, targetId) {
    let target = document.getElementById(targetId);
    let ob = e.options[e.selectedIndex]
    target.value = `${ob.value} `
    // target.value = `${ob.value} - ${ob.text}`
  }
