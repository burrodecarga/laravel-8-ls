<div>
    <section class="container">
        <h2 class="h2">Legal Documents for Hiring</h2>
        <h3>Please download and fill out these forms and you send them by mail to start our employment relationship once you have been selected.</h3>
          <div class="pdfs">
        <a href="/assets/pdf/I-9 Form .pdf" target="_blank" download class="pdf1" ><i class="far fa-file-pdf"></i>Download Form I-9</a>

        <a href="/assets/pdf/w-4 Form.pdf" target="_blank" download class="pdf1"> <i class="far fa-file-pdf"></i>Download Form W-4</a>


        <a href="/assets/pdf/Time Card for Labor Staffers.pdf" target="_blank" download class="pdf1"><i class="far fa-file-pdf"></i>Download Timesheet</a>

        <a href="/assets/pdf/Employee Agreement.pdf" target="_blank" download class="pdf1"><i class="far fa-file-pdf"></i>Download Employee Agreement</a>

        <a href="/assets/pdf/Direct Deposit Form INVOPEO.pdf" target="_blank" download class="pdf1"><i class="far fa-file-pdf"></i>Download Direct Deposit Form</a>


        </div>
          <h2>Watch the security videos is mandatory to be considered for the job</h2>
          <h2>We highly recommend to watch our <a class="aa" href="/focal-points">Focal Points</a> with all the security videos</h2>
          <div class="videos">
   <video width="320" height="240" controls class="video1">
    <source src={{asset("/assets/media/jobs/video1.mp4")}} type="video/mp4"/>
    Your browser does not support the video tag.

  </video>
  <video width="320" height="240" controls class="left">
    <source src={{asset("/assets/media/jobs/video2.mp4")}}  type="video/mp4"/>
    Your browser does not support the video tag.
  </video>
  </div>

  <form>
    <h3 class="text-green-500 font-medium">I declare that I watched the safety videos to be considered for the job <i class="fas fa-check text-green-800 font-bold"></i></h3>
  </form>

    <button button class="bg-yellow-500 hover:bg-yellow-700
    rounded mx-2 px-2 text-sm text-white" wire:click ="declare">I declare that I saw the security videos</button>




  <Link href="/resume">
  <a href="#">
  <h2>create, update or upload a pdf file of your resume, click here</h2>
  </a>
  </Link>

  <div>
  <h3>{userResumen.name}</h3>
  <p>phone {userResumen.phone}</p>
  <p>address {userResumen.address}</p>
  <p>about me {userResumen.about}</p>
  <p>skills {userResumen.skills}</p>
  <p>experience {userResumen.experience}</p>
  <p>plus {userResumen.plus}</p>
  {userResumen.resume &&  (<a class="pdf1" href={`${publicRuntimeConfig.API_URL}${userResumen.resume.url}`} target="_blank" download><PictureAsPdfIcon />Download resume: {userResumen.name}</a>)
          }
  </div>
  <div>
  <h1>Upload a PDF file with your I-94 or W-4 filled out</h1>
    <form class="form}>
    <input class="submit2" type="file" name="files" onChange={e=>(setDocument(e.target.files[0]))} defaultValue={document}
    accept="application/pdf" required/>
    <input class="submit" type="text" name="ref" defaultValue="cvs" hidden/>
    <input class="submit" type="text" name="refId" defaultValue={userCv} hidden/>
    <input class="submit" type="text" name="field" defaultValue="document"hidden/>
    <input class="submit" type="submit" value="Submit" onClick={(e)=>upload(e)} />
  </form>
  <br/>
  </div>

  </section>


</div>
