type ContainerProps = {
  children?: React.ReactNode
}

const Container = ({ children }: ContainerProps) => {
  return <div className="container mx-auto px-5 md:px-12">{children}</div>
}

export default Container
