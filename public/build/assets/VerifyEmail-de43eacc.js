import{T as m,h as f,c as g,w as s,o as a,a as o,u as e,Z as p,f as _,g as h,b as i,d as n,n as y,k as b,e as v}from"./app-bd4e5d45.js";import{_ as k}from"./GuestLayout-eda006e7.js";import{P as x}from"./PrimaryButton-17f6011a.js";import"./ApplicationLogo-085607bc.js";import"./_plugin-vue_export-helper-c27b6911.js";const w=i("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},B=["onSubmit"],E={class:"mt-4 flex items-center justify-between"},P={__name:"VerifyEmail",props:{status:{type:String}},setup(r){const c=r,t=m({}),d=()=>{t.post(route("verification.send"))},u=f(()=>c.status==="verification-link-sent");return(l,N)=>(a(),g(k,null,{default:s(()=>[o(e(p),{title:"Email Verification"}),w,e(u)?(a(),_("div",V," A new verification link has been sent to the email address you provided during registration. ")):h("",!0),i("form",{onSubmit:v(d,["prevent"])},[i("div",E,[o(x,{class:y({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),o(e(b),{href:l.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:s(()=>[n("Log Out")]),_:1},8,["href"])])],40,B)]),_:1}))}};export{P as default};
