import { router } from '@inertiajs/vue3';

export const useSetStorage = ()=>{

function getpack(pckname:string,bnfit1:string,bnfit2:string,bnfit3:string,
                 price:string,img:string,bnfit4:string,bnfit5:string,bnfit6:string,
                 bnfit7:string,bnfit8:string,status:string,bnfit9:string,pg:string) 
             {
        localStorage.clear();
        localStorage.setItem("package",pckname);
        localStorage.setItem("benefit1",bnfit1);
        localStorage.setItem("benefit2",bnfit2);
        localStorage.setItem("benefit3",bnfit3);
        localStorage.setItem("benefit4",bnfit4);
        localStorage.setItem("benefit5",bnfit5);
        localStorage.setItem("benefit6",bnfit6);
        localStorage.setItem("benefit7",bnfit7);
        localStorage.setItem("benefit8",bnfit8);
        localStorage.setItem("benefit9",bnfit9);
        localStorage.setItem("prc",price);
        localStorage.setItem("image",img);
        localStorage.setItem("status",status);
        localStorage.setItem("type",pg)
        router.push({url:"getstartedpack"})
    }

    return { getpack }

}
