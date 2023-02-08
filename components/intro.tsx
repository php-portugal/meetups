const Intro = () => {
  const introHeading = '<?pt'

  return (
    <section className="flex-col md:flex-row flex items-center justify-center my-10">
      <h1 className="text-3xl text-purple-900 font-serif lg:text-7xl font-bold tracking-tighter leading-tight md:pr-8">
        {introHeading}
      </h1>
      <h2 className="text-center font-bold md:text-left text-lg mt-5 md:pl-8">
        A community of PHP developers in Portugal.
      </h2>
    </section>
  )
}

export default Intro
