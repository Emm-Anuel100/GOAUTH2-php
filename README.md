# Login with google using Php

This repository contains the open source Google OAuth API that allows you to authenticate the Google Platform from your PHP app.

<h3>Steps to create google application</h3>

For access google OAuth api we need to login into <a target="_blank" href="https://console.cloud.google.com">google developers console</a>.
<ol>
<li>Create new project from Project Dropdown menu or select existing project</li>
<li>From Dashboard click on “Enable Apis and services”. Search for Google+ Api and enable it for access.</li>
<li>In the sidebar, select Credentials then select OAuth consent screen tab. 
  <ul>
    <li>Choose Email address which shown with developer info.</li>
    <li>Specify Product name</li>
    <li>Other fields like Homepage Url, Product logo url, Policy and Terms of service url is optional so you can iggnore it.</li>
    <li>At last click on save.</li>
  </ul>  
</li>
<li>Select Credentials tab, click the Create credentials drop-down list and select OAuth client ID.</li>
<li>Choose Application type e.g Web, Mobile App e.t.c.
  <ul>
    <li>Specify name you like to add.</li>
    <li>In the Authorized JavaScript origins field, enter your app origin URI.</li>
    <li>Set redirect url in Authorised redirect URIs field.</li>
    <li>Click on create button.</li>
  </ul>  
</li>
<li>OAuth client Dialogue box will prompt. There are client id and secret key available that need to be defined while calling Google Api.<li>
</ol>
