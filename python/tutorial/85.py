class Error(Exception):
    """Base class for exceptions in this module. """
    pass

class InputError(Error):
    """Exception raised for errors in the input.

    Attributes:
        expression -- inpiut expression in which the error occured
        message -- explanation of the error
    """

    def __init__(self, expression,message):
        self.expression = expression
        self.message = message

class TransitionError(Error):
    """Raised when an operation attempts a state transation this's not allowed.

    Attributes:
        previous --state at begining of transation
        next --attempted new state
        message --explanation of why the specific transition is not allowed
    """

    def __init__(self,previous,next,message):
        self.previous = previous
        self.next = next
        self.message = message
