function testes(){
    return new Promise(function(resolve,reject){

        setTimeout(function(){
            const erro = false;
            if(erro){
                reject("Erro...");
            }else{
                resolve("A promise foi resolvida com sucesso!");
            }

        },5000)
        
    })
}

/*
testes().then(function(res){
    alert(res);
}).catch(function(err){
    alert(err);
})
*/

async function testes2() {
    await testes().then(function(res){
        alert(res);
    });
    alert('Olá');
}

testes2();