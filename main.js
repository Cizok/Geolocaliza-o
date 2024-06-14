if ('serviceWorker' in navigator) {
    window.addEventListener("load", ()=> {
        navigator.serviceWorker.register("sw.js").then(swReg => {
            console.log("sw.js registered");
        }).catch(err => {
            console.log("sw.js register err:", err);
        });
    });
}