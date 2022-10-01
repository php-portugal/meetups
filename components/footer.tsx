import Container from './container'

const Footer = () => {
  const copyright = `<?php Lisbon @ ${new Date().getFullYear()} ?>`

  return (
    <footer className="bg-neutral-50 border-t border-neutral-200">
      <Container>
        <div className="py-28 flex flex-col lg:flex-row items-center">
          <h3 className="text-4xl text-purple-900 font-serif lg:text-[2.5rem] font-bold tracking-tighter leading-tight text-center lg:text-left mb-10 lg:mb-0 lg:pr-4 lg:w-1/2">
            {copyright}
          </h3>
        </div>
      </Container>
    </footer>
  )
}

export default Footer
