{"version":3,"file":"script.map.js","names":["BX","namespace","Sender","Message","Editor","Helper","this","context","editor","prototype","classNameMoreActive","init","params","containerId","actionUri","mess","fieldPrefix","messageCode","messageId","templateType","templateId","moreButton","getNode","blockToCopy","hidden","copyBtn","document","getElementById","moreFields","bind","onMoreClick","onCopyClick","configuration","Configuration","ajaxAction","AjaxAction","hint","bindNodes","initFields","loadFrame","fieldNodes","querySelectorAll","convert","nodeListToArray","forEach","fieldNode","inputName","getAttribute","node","querySelector","tag","frameNode","src","getRequestingUri","lang","onload","loader","style","display","toggle","toggleClass","textArea","createElement","value","textContent","top","left","position","body","appendChild","focus","select","execCommand","remove","err","setAdaptedInstance","initTester","tester","Tester","addCustomEvent","eventNameSend","onTestSend","setTimeout","Template","Selector","selector","events","templateSelect","onTemplateSelect","template","code","setTemplate","type","fields","messageFields","reduce","field","onDemand","set","message","getMessageId","id","data","Object","assign","getConfiguration","get","manager","Event","EventEmitter","emit","getInputs","options","disableChecked","checked","inputs","filter","input","getInputName","name","indexOf","substring","length","fireEvent","isArray","push","TEMPLATE_TYPE","TEMPLATE_ID","window"],"sources":["script.js"],"mappings":"CAAC,WAGAA,GAAGC,UAAU,qBACb,GAAID,GAAGE,OAAOC,QAAQC,OACtB,CACC,MACD,CAEA,IAAIC,EAASL,GAAGE,OAAOG,OAMvB,SAASD,IAERE,KAAKC,QAAU,KACfD,KAAKE,OAAS,IACf,CACAJ,EAAOK,UAAUC,oBAAsB,qBACvCN,EAAOK,UAAUE,KAAO,SAAUC,GAEjCN,KAAKC,QAAUP,GAAGY,EAAOC,aACzBP,KAAKQ,UAAYF,EAAOE,UACxBR,KAAKS,KAAOH,EAAOG,KACnBT,KAAKU,YAAcJ,EAAOI,YAC1BV,KAAKW,YAAcL,EAAOK,YAC1BX,KAAKY,UAAYN,EAAOM,UAExBZ,KAAKa,aAAeP,EAAOO,aAC3Bb,KAAKc,WAAaR,EAAOQ,WAEzBd,KAAKe,WAAahB,EAAOiB,QAAQ,WAAYhB,KAAKC,SAClDD,KAAKiB,YAAclB,EAAOiB,QAAQ,wBAAyBhB,KAAKC,SAEhE,GAAID,KAAKiB,YACT,CACCjB,KAAKiB,YAAYC,OAAS,MAE1B,GAAIlB,KAAKc,aAAe,QACxB,CACCd,KAAKiB,YAAYC,OAAS,IAC3B,CACD,CAEAlB,KAAKmB,QAAUC,SAASC,eAAe,kBACvCrB,KAAKsB,WAAavB,EAAOiB,QAAQ,cAAehB,KAAKC,SACrD,GAAID,KAAKe,YAAcf,KAAKsB,WAC5B,CACC5B,GAAG6B,KAAKvB,KAAKe,WAAY,QAASf,KAAKwB,YAAYD,KAAKvB,MACzD,CAEA,GAAIA,KAAKmB,QACT,CACCzB,GAAG6B,KAAKvB,KAAKmB,QAAS,QAASnB,KAAKyB,YAAYF,KAAKvB,MACtD,CAEAA,KAAK0B,cAAgB,IAAIC,EAAc3B,MACvCA,KAAK4B,WAAa,IAAIlC,GAAGmC,WAAW7B,KAAKQ,WACzCT,EAAO+B,KAAKzB,KAAKL,KAAKC,SAEtBD,KAAK+B,YACL/B,KAAKgC,aACLhC,KAAKiC,WACN,EAEAnC,EAAOK,UAAU6B,WAAa,WAE7B,IAAIE,EAAalC,KAAKC,QAAQkC,iBAAiB,mBAC/CD,EAAaxC,GAAG0C,QAAQC,gBAAgBH,GACxCA,EAAWI,SAAQ,SAAUC,GAC5B,IAAIC,EAAYD,EAAUE,aAAa,iBACvC,IAAIC,EAAOH,EAAUI,cAAc,UAAYH,EAAY,MAC3DzC,EAAO6C,IAAIvC,KAAKkC,EAAWG,EAC5B,GAAG1C,KACJ,EAEAF,EAAOK,UAAU8B,UAAY,WAE5B,IAAIY,EAAY9C,EAAOiB,QAAQ,4BAA6BhB,KAAKC,SAGjE,GAAG4C,EACH,CACCA,EAAUC,IAAM9C,KAAK4B,WAAWmB,iBAAiB,cAAe,CAC/DC,KAAQ,GACRpC,UAAaZ,KAAKY,YAGnBiC,EAAUI,OAAS,WAElB,IAAIC,EAASnD,EAAOiB,QAAQ,wBAA0BtB,GAAGE,OAAOC,QAAQC,OAAOG,SAC/EiD,EAAOC,MAAMC,QAAU,OACvBP,EAAUM,MAAMC,QAAU,OAC3B,CACD,CACD,EAEAtD,EAAOK,UAAUqB,YAAc,WAE9BzB,EAAOqD,QAAQC,OAAOrD,KAAKsB,YAC3B5B,GAAG4D,YAAYtD,KAAKe,WAAYf,KAAKI,oBACtC,EACAN,EAAOK,UAAUsB,YAAc,WAE9B,IAAI8B,EAAWnC,SAASoC,cAAc,YACtCD,EAASE,MAAQrC,SAASuB,cAAc,0BAA0Be,YAGlEH,EAASJ,MAAMQ,IAAM,IACrBJ,EAASJ,MAAMS,KAAO,IACtBL,EAASJ,MAAMU,SAAW,QAE1BzC,SAAS0C,KAAKC,YAAYR,GAC1BA,EAASS,QACTT,EAASU,SAET,IACC7C,SAAS8C,YAAY,QACrBX,EAASY,QAEV,CADE,MAAOC,GACT,CACD,EACAtE,EAAOK,UAAUkE,mBAAqB,SAAUnE,GAE/CF,KAAKE,OAASA,CACf,EACAJ,EAAOK,UAAUmE,WAAa,WAE7B,IAAIC,EAAS7E,GAAGE,OAAOC,QAAQ2E,OAC/B,IAAKD,EACL,CACC,MACD,CAEA7E,GAAG+E,eAAeF,EAAQA,EAAOG,cAAe1E,KAAK2E,WAAWpD,KAAKvB,MACtE,EACAF,EAAOK,UAAU4B,UAAY,WAE5B6C,WAAW5E,KAAKsE,WAAW/C,KAAKvB,MAAO,KAEvC,GAAIN,GAAGE,OAAOiF,UAAYnF,GAAGE,OAAOiF,SAASC,SAC7C,CACC,IAAIC,EAAWrF,GAAGE,OAAOiF,SAASC,SAClCpF,GAAG+E,eAAeM,EAAUA,EAASC,OAAOC,eAAgBjF,KAAKkF,iBAAiB3D,KAAKvB,MACxF,CACD,EACAF,EAAOK,UAAU+E,iBAAmB,SAAUC,GAE7C,GAAInF,KAAKiB,YACT,CACCjB,KAAKiB,YAAYC,OAAS,MAE1B,GAAIiE,EAASC,OAAS,QACtB,CACCpF,KAAKiB,YAAYC,OAAS,IAC3B,CACD,CAEAlB,KAAKqF,YAAYF,EAClB,EACArF,EAAOK,UAAUkF,YAAc,SAASF,GAEvCnF,KAAKa,aAAesE,EAASG,KAC7BtF,KAAKc,WAAaqE,EAASC,KAE3B,IAAIG,EAAS,CAAC,GACbJ,EAASK,eAAiB,CAAC,GAAGC,QAAO,SAAUF,EAAQG,GACvD,IAAKA,EAAMC,SACX,CACCJ,EAAOG,EAAMN,MAAQM,EAAMjC,KAC5B,CACA,OAAO8B,CACR,GAAGA,GAEHvF,KAAK0B,cAAckE,IAAIL,EACxB,EACAzF,EAAOK,UAAUwE,WAAa,SAAUkB,GAEvC,GAAG7F,KAAK8F,eAAgB,CACvBD,EAAQE,GAAK/F,KAAK8F,cACnB,CACA,IAAKD,EAAQG,KACZH,EAAQG,KAAO,CAAC,EAEjBH,EAAQG,KAAOC,OAAOC,OAAOL,EAAQG,KAAMhG,KAAKmG,mBACjD,EAEArG,EAAOK,UAAU2F,aAAe,WAE/B,OAAO9F,KAAKY,SACb,EAEAd,EAAOK,UAAUgG,iBAAmB,WAEnC,OAAOnG,KAAK0B,cAAc0E,KAC3B,EAEA,SAASzE,EAAc0E,GAEtBrG,KAAKqG,QAAUA,EACf3G,GAAG4G,MAAMC,aAAaC,KAAK,2CAA4CxG,KAExE,CACA2B,EAAcxB,UACd,CACCsG,UAAW,SAAUC,GAEpBA,EAAUA,GAAW,CAAC,EACtBA,EAAQC,eAAiBD,EAAQC,gBAAkB,MACnD,IAAIC,EAAUF,EAAQC,eAAiB,GAAK,WAE5C,IAAIE,EAAS7G,KAAKqG,QAAQpG,QAAQkC,iBACjC,qBACA,uBACA,yBACA,sBAAwByE,EAAU,KAClC,yBAA2BA,GAE5BC,EAASnH,GAAG0C,QAAQC,gBAAgBwE,GAEpC,OAAOA,EAAOC,QAAO,SAAUC,GAC9B,QAAS/G,KAAKgH,aAAaD,EAC5B,GAAG/G,KACJ,EACAgH,aAAc,SAAUD,GAEvB,IAAIE,EAAOF,EAAME,KACjB,GAAIA,EAAKC,QAAQlH,KAAKqG,QAAQ3F,eAAiB,EAC/C,CACC,MAAO,EACR,CAEA,OAAOuG,EAAKE,UAAUnH,KAAKqG,QAAQ3F,YAAY0G,OAEhD,EACAxB,IAAK,SAAUI,GAEdhG,KAAKyG,UAAU,CAACE,eAAgB,OAAOrE,SAAQ,SAAUyE,GACxD,IAAIE,EAAOjH,KAAKgH,aAAaD,GAC7B,GAAIf,EAAKiB,GACT,CACC,OAAQF,EAAMzB,MAEb,IAAK,WACJyB,EAAMH,QAAUG,EAAMtD,QAAUuC,EAAKiB,GACrC,MAED,QACCF,EAAMtD,MAAQuC,EAAKiB,GAGrBvH,GAAG2H,UAAUN,EAAO,SACrB,CACD,GAAG/G,KACJ,EACAoG,IAAK,WAEJ,IAAIJ,EAAO,CAAC,EACZhG,KAAKyG,YAAYnE,SAAQ,SAAUyE,GAClC,IAAIE,EAAOjH,KAAKgH,aAAaD,GAC7B,IAAKA,EAAMtD,MACX,CACC,MACD,CAEA,GAAIuC,EAAKiB,GACT,CACC,IAAKvH,GAAG4F,KAAKgC,QAAQtB,EAAKiB,IAC1B,CACCjB,EAAKiB,GAAQ,CAACjB,EAAKiB,GACpB,CAEAjB,EAAKiB,GAAMM,KAAKR,EAAMtD,MACvB,KAEA,CACCuC,EAAKiB,GAAQF,EAAMtD,KACpB,CACD,GAAGzD,MAEHgG,EAAKwB,cAAgBxH,KAAKqG,QAAQxF,aAClCmF,EAAKyB,YAAczH,KAAKqG,QAAQvF,WAEhC,OAAOkF,CACR,GAGDtG,GAAGE,OAAOC,QAAQC,OAAS,IAAIA,CAE/B,EAnSA,CAmSE4H"}